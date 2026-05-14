<?php

namespace OmieLib\Servicos\Oslote\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Oslote\Detalhes;
use OmieLib\Servicos\Oslote\Lotes;
use OmieLib\Servicos\Oslote\NfseLote;
use OmieLib\Servicos\Oslote\OrdemServicoLoteJsonClient;
use OmieLib\Servicos\Oslote\Response\FaturarLoteOSResponse;
use OmieLib\Servicos\Oslote\Response\ListarLoteNfseResponse;
use OmieLib\Servicos\Oslote\Response\ListarLotesOSResponse;
use OmieLib\Servicos\Oslote\Response\StatusLoteOsResponse;

/**
 * Faturar Ordens de serviço em lote a partir da etapa informada.
 *
 * @pw_element string $cEtapa Etapa da Operação de Venda.<BR><BR>Utilize a tag 'codigo' do método 'ListarEtapasFaturamento' da API<BR>/api/v1/produtos/etapafat/<BR>para obter essa informação.<BR><BR>Os valores são fixos, mas as descrições (funções atribuídas a cada coluna pode mudar. A API irá indicar a descrição de cada coluna.<BR><BR>Os valores disponíveis para esse campo podem ser:<BR><BR>'10' - Primeira coluna<BR>'20' - Segunda coluna<BR>'30' - Terceira coluna<BR>'40' - Quarta coluna<BR>'50' - Faturar
 * @pw_complex FaturarLoteOSRequest
 */
class FaturarLoteOSRequest{
	/**
	 * Etapa da Operação de Venda.<BR><BR>Utilize a tag 'codigo' do método 'ListarEtapasFaturamento' da API<BR>/api/v1/produtos/etapafat/<BR>para obter essa informação.<BR><BR>Os valores são fixos, mas as descrições (funções atribuídas a cada coluna pode mudar. A API irá indicar a descrição de cada coluna.<BR><BR>Os valores disponíveis para esse campo podem ser:<BR><BR>'10' - Primeira coluna<BR>'20' - Segunda coluna<BR>'30' - Terceira coluna<BR>'40' - Quarta coluna<BR>'50' - Faturar
	 *
	 * @var string
	 */
	public string $cEtapa;
}
