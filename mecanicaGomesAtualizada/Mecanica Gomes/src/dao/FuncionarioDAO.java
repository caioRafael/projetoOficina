/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package dao;

import conexao.FabricaConexao;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import model.Funcionario;


public class FuncionarioDAO {
     public boolean create(Funcionario funcionario) {
        if (funcionario == null) {
            throw new IllegalArgumentException();
        }
        String sql = "INSERT INTO funcionario (nome, telefone,endereco,salario,senha) VALUES (?,?,?,?,?)";
        try (Connection conn = FabricaConexao.getConexao(); PreparedStatement ps = conn.prepareStatement(sql)) {
            ps.setString(1, funcionario.getNome());
            ps.setString(2, funcionario.getTelefone());
            ps.setString(3, funcionario.getEndereco());
            ps.setString(4, funcionario.getSalario());
            ps.setString(5, funcionario.getSenha());
            int linhasAfetadas = ps.executeUpdate();
            if (linhasAfetadas > 0) {
                return true;
            }

        } catch (SQLException e) {
            e.printStackTrace();
        }
        return false;
    }

    public List<Funcionario> getAll() {
        String sql = "SELECT * FROM funcionario";
        ResultSet rs = null;
        List<Funcionario> allFuncionario = new ArrayList<>();
        try (
                Connection conn = FabricaConexao.getConexao();
                PreparedStatement ps = conn.prepareStatement(sql)) {
            rs = ps.executeQuery();

            while (rs.next()) {
                Funcionario p = new Funcionario();
                p.setId_funcionario(rs.getInt("id_funcionario"));
                p.setNome(rs.getString("nome"));
                p.setEndereco(rs.getString("endereco"));
                p.setSalario(rs.getString("salario"));
                p.setTelefone(rs.getString("telefone"));
                p.setSenha(rs.getString("senha"));
                allFuncionario.add(p);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            FabricaConexao.fecharConexao(rs);
        }
        return allFuncionario;
    }

    public Funcionario getById(Integer id) {
        if (id == null || id < 0) {
            throw new IllegalArgumentException();
        }
        String sql = "SELECT * FROM funcionario WHERE id_funcionario=?";
        ResultSet rs = null;
        Funcionario p = null;
        try (Connection conn = FabricaConexao.getConexao(); PreparedStatement ps = conn.prepareStatement(sql)) {
            ps.setInt(1, id);
            rs = ps.executeQuery();
            rs.next();

            p = new Funcionario();
            p.setId_funcionario(rs.getInt("id_funcionario"));
            p.setNome(rs.getString("nome"));
            p.setEndereco(rs.getString("endereco"));
            p.setTelefone(rs.getString("telefone"));
            p.setSalario(rs.getString("salario"));
            p.setSenha(rs.getString("senha"));


        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            FabricaConexao.fecharConexao(rs);
        }
        return p;
    }

    public boolean update(Funcionario funcionario) {
        if (funcionario == null || funcionario.getId_funcionario() <= 0 || funcionario.getId_funcionario()<= 0) {
            throw new IllegalArgumentException();
        }
        String sql = "UPDATE funcionario SET nome = ?,endereco = ?, telefone=?, salario = ?, senha = ? WHERE id_funcionario = ?";
        try (Connection conn = FabricaConexao.getConexao(); PreparedStatement ps = conn.prepareStatement(sql)) {
            ps.setString(1, funcionario.getNome() );
            ps.setString(2, funcionario.getEndereco());
            ps.setString(3, funcionario.getTelefone());
            ps.setString(4, funcionario.getSalario());
            ps.setString(5, funcionario.getSenha());
            ps.setInt(6, funcionario.getId_funcionario());
            
            
            int linhasAfetadas = ps.executeUpdate();
            if (linhasAfetadas > 0) {
                return true;
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return false;
    }
    public boolean delete(Integer id) {
		if (id == null || id < 0) {
			throw new IllegalArgumentException();
		}
		String sql = "DELETE FROM funcionario WHERE id_funcionario= ?";
		try 
                    (Connection conn = FabricaConexao.getConexao();
                        PreparedStatement ps = conn.prepareStatement(sql)) {
			ps.setInt(1, id);
			int linhasAfetadas = ps.executeUpdate();
			if (linhasAfetadas > 0) {
				return true;
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return false;

	}
         public List<Funcionario> getAllNome(String desc) {
		
		ResultSet rs = null;
		java.util.List<Funcionario> allFuncionario = new ArrayList<>();
		try (
                        Connection conn = FabricaConexao.getConexao(); 
                        PreparedStatement ps = conn.prepareStatement("SELECT * FROM funcionario WHERE nome LIKE ?");
                       ){ 
                        ps.setString(1,"%" + desc + "%");
			rs = ps.executeQuery();
                        
			while (rs.next()) {
                            
			    Funcionario p = new Funcionario();
                            
                            p.setId_funcionario(rs.getInt("id_funcionario"));
                            p.setNome(rs.getString("nome"));
                            p.setEndereco(rs.getString("endereco") );
                            p.setTelefone(rs.getString("telefone"));
                            p.setSalario(rs.getString("salario"));
                            p.setSenha(rs.getString("senha"));
                        
                            
                            allFuncionario.add(p);
                            
			}
		} catch (SQLException e) {
			e.printStackTrace();
		} finally {
			FabricaConexao.fecharConexao(rs);
		}
		return allFuncionario;
	}
}
