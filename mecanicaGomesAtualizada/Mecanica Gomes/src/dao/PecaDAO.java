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
import model.Peca;


public class PecaDAO {
     public boolean create(Peca peca) {
        if (peca == null) {
            throw new IllegalArgumentException();
        }
        String sql = "INSERT INTO peca (nome, preco,estoque,imagem) VALUES (?,?,?,?)";
        try (Connection conn = FabricaConexao.getConexao(); PreparedStatement ps = conn.prepareStatement(sql)) {
            ps.setString(1, peca.getNome());
            ps.setString(2, peca.getPreco());
            ps.setString(3, peca.getEstoque());
            ps.setString(4, peca.getImagem());
            int linhasAfetadas = ps.executeUpdate();
            if (linhasAfetadas > 0) {
                return true;
            }

        } catch (SQLException e) {
            e.printStackTrace();
        }
        return false;
    }

    public List<Peca> getAll() {
        String sql = "SELECT * FROM peca";
        ResultSet rs = null;
        List<Peca> allPeca = new ArrayList<>();
        try (
                Connection conn = FabricaConexao.getConexao();
                PreparedStatement ps = conn.prepareStatement(sql)) {
            rs = ps.executeQuery();

            while (rs.next()) {
                Peca p = new Peca();
                p.setId_peca(rs.getInt("id_peca"));
                p.setNome(rs.getString("nome"));
                p.setPreco(rs.getString("preco"));
                p.setEstoque(rs.getString("estoque"));
                p.setImagem(rs.getString("imagem"));
                allPeca.add(p);
            }
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            FabricaConexao.fecharConexao(rs);
        }
        return allPeca;
    }

    public Peca getById(Integer id) {
        if (id == null || id < 0) {
            throw new IllegalArgumentException();
        }
        String sql = "SELECT * FROM peca WHERE id_funcionario=?";
        ResultSet rs = null;
        Peca p = null;
        try (Connection conn = FabricaConexao.getConexao(); PreparedStatement ps = conn.prepareStatement(sql)) {
            ps.setInt(1, id);
            rs = ps.executeQuery();
            rs.next();

            p = new Peca();
            p.setId_peca(rs.getInt("id_peca"));
            p.setNome(rs.getString("nome"));
            p.setPreco(rs.getString("preco"));
            p.setEstoque(rs.getString("estoque"));
            p.setImagem(rs.getString("imagem"));


        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            FabricaConexao.fecharConexao(rs);
        }
        return p;
    }

    public boolean update(Peca peca) {
        if (peca == null || peca.getId_peca()<= 0 || peca.getId_peca()<= 0) {
            throw new IllegalArgumentException();
        }
        String sql = "UPDATE peca SET nome = ?,preco = ?, estoque=? WHERE id_peca = ?";
        try (Connection conn = FabricaConexao.getConexao(); PreparedStatement ps = conn.prepareStatement(sql)) {
            ps.setString(1, peca.getNome() );
            ps.setString(2, peca.getPreco());
            ps.setString(3, peca.getEstoque());
            ps.setInt(4, peca.getId_peca());
            
            
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
		String sql = "DELETE FROM peca WHERE id_peca= ?";
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
    
     public List<Peca> getAllNome(String desc) {
		
		ResultSet rs = null;
		java.util.List<Peca> allPeca = new ArrayList<>();
		try (
                        Connection conn = FabricaConexao.getConexao(); 
                        PreparedStatement ps = conn.prepareStatement("SELECT * FROM peca WHERE nome LIKE ?");
                       ){ 
                        ps.setString(1,"%" + desc + "%");
			rs = ps.executeQuery();
                        
			while (rs.next()) {
                            
			    Peca p = new Peca();
                            
                            p.setId_peca(rs.getInt("id_peca"));
                            p.setNome(rs.getString("nome"));
                            p.setEstoque(rs.getString("estoque") );
                            p.setPreco(rs.getString("preco"));
                            p.setImagem(rs.getString("imagem"));
                            
                        
                            
                            allPeca.add(p);
                            
			}
		} catch (SQLException e) {
			e.printStackTrace();
		} finally {
			FabricaConexao.fecharConexao(rs);
		}
		return allPeca;
	}
    
}
